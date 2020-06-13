import React, { Component } from 'react';
import axios from 'axios';

class FetchDate extends Component{
    state = {
        date: ''
      }
    
      componentDidMount() {
        setInterval(() => {
          axios.get(`http://localhost:9000/`).then(res => {
          console.log(res);
          this.setState({date: res.data});
        },10000);
        })
        
      }
  
    
    render() {
        return(
          <div>
            <h3 className="datecss">{this.state.date}</h3>
          </div>
        );
    }
}
export default FetchDate;
