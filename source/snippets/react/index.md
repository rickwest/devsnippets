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

### Context Provider Component with useState Hook

Here we use a similar context example as above. However instead of using a class based component, we use a functional component with the useState hook.

```javascript
import React, { createContext, useState } from 'react';

export const MyContext = createContext();

export const ContextProvider = props => {
  const [state, setState] = useState({ key: 'value' });
  return (
    <MyContext.Provider value={{ state, setState }}>
      {props.children}
    </MyContext.Provider>
  )
}
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

### Hook for throttling value change

A custom hook to help throttling changes to variables. Especially useful when automatically queriying api's based on user text-input

```javascript
import { useState, useEffect, useRef } from 'react';

const useThrottle = (value, limit = 300) => {
  const [throttledValue, setThrottledValue] = useState();
  const lastRan = useRef(Date.now());

  useEffect(() => {
    const handler = setTimeout(() => {
      if (Date.now() - lastRan.current >= limit) {
        setThrottledValue(value);
        lastRan.current = Date.now();
      }
    }, limit - (Date.now() - lastRan.current));

    return () => {
      clearTimeout(handler);
    };
  }, [value, limit]);

  return throttledValue;
};

```

### Hook for debouncing value change

A similar custom hook to help debouncing changes to variables.

```javascript
import { useState, useEffect } from 'react';

function useDebounce(value, delay) {
  const [debouncedValue, setDebouncedValue] = useState(value);
  useEffect(() => {
    const handler = setTimeout(() => {
      setDebouncedValue(value);
    }, delay);
    return () => {
      clearTimeout(handler);
    };
  }, [delay, value]);
  return debouncedValue;
}

```


### Rendering your react component to the DOM

Render your react element into the DOM. The id belongs to the element in which the react application will mount.  

```javascript
import React from 'react'
import ReactDOM from 'react-dom'

import App from './app'

ReactDOM.render(<App />, document.getElementById('foo-bar'))
```

### Rendering component for each array item

Let's supose that you have to create component that renders a job list.

1. JobContent component
```javascript
const JobContent = ({ children }) => (
  <ul>
    {children}
  </ul>
);
export default JobContent;
```

2. JobItem component
```javascript
const JobItem = ({{name}}) => (
  <li>
    <h4{name}</h4>
  </li>
);
export default JobItem;
```

3. Map
```javascript
const renderJobItems = jobs => {
  jobs.map(jobItem => (
    <JobItem name={jobItem.name} />
  ));
}
const RenderJobs = ({jobs}) => (
  <JobContent>
    {renderJobItems(jobs)}
  </JobContent>
)
export const RenderJobs;
```

4. Just pass jobs array to RenderJobs
```javascript
const jobs = ['Software Engineer', 'Tech Recruiter']
<RenderJobs jobs={jobs} />
);
```

### Using Refs to access DOM properties

```javascript
class MyComponent extends Component {
  componentDidMount() {
    this.input.focus();
  }
  render() {
    return (
      <div>
        <input ref={el => (this.input = el)} />
      </div>
    );
  }
}
```

### Create a list by passing an array

```javascript
class AnimalsList extends Component {
  render() {
    const { animals } = this.props.animals; // Array of animals

    return (
      <ul>
        {animals.map(animal => (
          <Animal name={animal} key={animals.key} />
        ))}
      </ul>
    );
  }
}
```

### Create an element without using JSX

```javascript
React.createElement("div", { className: "maindiv" });
```

---