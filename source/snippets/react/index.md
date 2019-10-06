---
title: React
extends: _layouts.documentation
description: React Dev Snippets
section: content
---

# React

## Components

### Simple Component

React components implement a render() method that takes input data and returns what to display. This example uses an XML-like syntax called JSX. Input data that is passed into the component can be accessed by render() via this.props.

```javascript
class HelloMessage extends React.Component {
  render() {
    return (
      <div>
        Hello {this.props.name}
      </div>
    );
  }
}

ReactDOM.render(
  <HelloMessage name="Rick" />,
  document.getElementById('hello-example')
);
```

### Stateful Components

In addition to taking input data (accessed via this.props), a component can maintain internal state data (accessed via this.state). When a component’s state data changes, the rendered markup will be updated by re-invoking render().

```javascript
class Timer extends React.Component {
  constructor(props) {
    super(props);
    this.state = { seconds: 0 };
  }

  tick() {
    this.setState(state => ({
      seconds: state.seconds + 1
    }));
  }

  componentDidMount() {
    this.interval = setInterval(() => this.tick(), 1000);
  }

  componentWillUnmount() {
    clearInterval(this.interval);
  }

  render() {
    return (
      <div>
        Seconds: {this.state.seconds}
      </div>
    );
  }
}

ReactDOM.render(
  <Timer />,
  document.getElementById('timer-example')
);

```

### Hooks in Combination with setInterval()

In comparison to stateful components in React, hooks let you use features like state without the neccessity of writing a class compoent.  

```javascript
function useInterval(callback) {
  const savedCallback = useRef();

  useEffect(() => {
    savedCallback.current = callback;
  }, [callback]);

  useEffect(() => {
    const id = setInterval(() => savedCallback.current(), 1000);
    return () => clearInterval(id);
  });
}

function Timer() {
  const [seconds, setSeconds] = useState(0);

  useInterval(() => setSeconds(seconds + 1));

  return (
    <div>
      Seconds: {seconds}
    </div>
  );
}

ReactDOM.render(
  <Timer />, 
  document.getElementById("timer-example")
);
```