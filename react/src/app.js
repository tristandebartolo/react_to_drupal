import React, { Component } from 'react';
import {render} from 'react-dom';

import './app.scss';

class App extends Component {
  render() {
    return (
      <div>
        <h2>hello Tribute to React, Yeah!</h2>
      </div>
    )
  }
}

render(<App/>, document.getElementById('app'));