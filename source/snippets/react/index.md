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

### setState() Best Practices

The most common confusion in using React is `setState()` function, Here's some tips on how to use `setState()` properly.

```javascript

class Lock extends React.Component {
  constructor(props) {
    super(props);
    this.state = { locked: false };
  }

  unlock = () => {
    // we can access previous state via passing function
    this.setState(state => ({
      locked: !state.locked
    }));
  }

  lock = () => {
    // setState is an asynchronous function, so that there are times that, it can't return the mutate state 
    // immediately, but using the second parameter in setState(), you can now access the new state value.
    this.setState({locked: true}, () => {
      console.log(this.state.locked);
    })
  }
  
  combinedSetState = () => {
    // We can actually combined this ways :)  
    this.setState(state => ({
      locked: !state.locked
    }), () => {
      console.log(this.state.locked);
    })
  }

  componentDidMount() {
    this.unlock()
  }

  render() {
    return (
      <div>
        Is locked: {this.state.locked}
      </div>
    );
  }
}

ReactDOM.render(
  <Lock />,
  document.getElementById('lock')
);

```