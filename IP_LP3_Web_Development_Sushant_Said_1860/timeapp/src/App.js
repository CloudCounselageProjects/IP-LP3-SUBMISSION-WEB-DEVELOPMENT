import React, { Component } from 'react';
import './index.css';
import axios from 'axios';
import Box from './components/containerBox';

const WEEKDAYS = {
  1: 'Monday',
  2: 'Tuesday',
  3: 'Wednesday',
  4: 'Thursday',
  5: 'Friday',
  6: 'Saturday',
  0: 'Sunday'
}

class App extends Component {

  constructor(props) {
    super(props);
    this.state = {
      weekday: '',
      dayOfMonth: '',
      month: '',
      year: '',
      hr: '',
      min: '',
      meridiem: ''
    };

  }

  getTime = () => {
    axios.get('/cc/time')
      .then(response => {
        console.log(response.data);
        const date = response.data;
        this.setState({
          hr: date.hour <= 12 ? date.hour : date.hour % 12,
          min: response.data.minutes,
          meridiem: date.hour <= 12 ? 'AM' : 'PM',
          weekday: WEEKDAYS[date.weekday],
          dayOfMonth: date.dayOfMonth,
          month: date.month,
          year: date.year
        });
      })
      .catch(err => {
        console.log(err.message);
      })
  };
  componentWillMount() {
    this.getTime();
  }

  componentDidMount() {
    this.interval = setInterval(() => this.getTime(), 60000);
  }

  componentWillUnmount() {
    clearInterval(this.interval);
  }

  render() {

    return (
      <div className="main" >
        <center>
          <div className="card">
            <div className="date-container">
              <h2>{this.state.weekday + " ,"}</h2>
              <h2>
                {this.state.dayOfMonth + ' ' + this.state.month + ' ' + this.state.year}
              </h2>
            </div>
            <div className="fade_rule"></div>
            <div className="time-container">
              <div className='card-title'>
                <h1>Time</h1>
              </div>
              <div className='row'>
                <Box>{this.state.hr}</Box>
                <Box>{this.state.min}</Box>
                <Box>{this.state.meridiem}</Box>
              </div>
            </div>
          </div>
        </center>
      </div>

    )
  }
}

export default App;
