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
    return <div>Hello {this.props.name}</div>;
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
    return <div>Seconds: {this.state.seconds}</div>;
  }
}

ReactDOM.render(<Timer />, document.getElementById('timer-example'));
```

### UseEffect & UseState Hook

Hooks are a new addition in React 16.8. They let you use state and other React features without writing a class. The Effect Hook lets you perform side effects in function components. The State Hook lets you manage state in a functional component.

Here is the above code snippet, using Hooks:

```javascript
function Timer(props) {

  // declare your state variable, a function to modify it, and set an initial value
  const [seconds, setSeconds] = useState(0);

  const tick = () => {
    setSeconds(seconds + 1);
  }
  
  useEffect(() => {
    const interval = setInterval(() => {
      // this will run every second!
      tick();
    }, 1000);
    // you can return a 'clean up' function which will run when the component unmounts
    return () => clearInterval(interval);
  }, []);

  return (
    <div>
      Seconds: {seconds}
    </div>
  );
}

ReactDOM.render(
  <Timer />,
  document.getElementById('timer-example')
);
```

### Context Provider Component

Context is a way or providing global state to a React application. There are two parts to Context, a Provider and a Consumer. A Context Provider Component allows all components rendered inside to access the value passed.

```javascript
import React, { createContext } from 'react';

const MyContext = React.createContext(defaultValue);

class ContextProvider extends React.Component {
  state = {
    key: 'value'
  };
  render() {
    return (
      <MyContext.Provider value={this.state}>
        {this.props.children} // all children can access value using a consumer
        or useContext
      </MyContext.Provider>
    );
  }
}

export default ContextProvider;
```

### Context Consumer Component

Context is a way or providing global state to a React application. There are two parts to Context, a Provider and a Consumer. The Context Consumer component allows access to the value in the provider via a 'render prop' pattern.

```javascript
import React from 'react';

import MyContext from '../ContextProvider';

class AnyComponent extends React.Component {
  render() {
    return (
      <MyContext.Consumer>
        {value => {
          return <p>now we can render the {value}</p>;
        }}
      </MyContext.Consumer>
    );
  }
}

export default AnyComponent;
```

### useContext Hook

Context is a way or providing global state to a React application. There are two parts to Context, a Provider and a Consumer. The useContext hook allows access to the value in function components.

```javascript
import React, { useContext } from 'react';

import MyContext from '../ContextProvider';

const AnyFunctionComponent = () => {
  const value = useContext(MyContext);
  return <p>now we can render the {value}</p>;
};

export default AnyFunctionComponent;
```

### Functional Components

Functional components are the simplest way to write components in React. They don't hold state, they don't fire lifecycle events; they simply take props and render a React Element.

```javascript
function MyComponent ({ name }) {
  return <div className='message-box'>
    Hello {name}
  </div>
}
```
Functional Components can be written with arraow functions.

```javascript
const Greeting = (props) => 
  <h1> Hello {props.name} </h1>;
  
ReactDOM.render() {
  <Greeting name="xyz" />;
  document.getElementById("root");
};
```

### User Input Components

As the user types into the input field, we will store the input in our Component State and display it on the screen.

```javascript
import React, { Component } from 'react';

class InputField extends Component {
  state = {
    userInput: ''
  }

  handleChange = (e) => {
    this.setState({
      userInput: e.target.value
    })
  }

  render() {
    return (
      <div style={{paddingLeft: '5%'}}>
       <input onChange={(e) => this.handleChange(e)}type="text" />
       <p><strong>You have typed:</strong> {this.state.userInput}</p>
      </div>
    );
  }
}

export default InputField;
```
