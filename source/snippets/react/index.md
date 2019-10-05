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