import React, {Component} from 'react';
import axios from 'axios';

class FetchDateTime extends Component {
        
    state ={
            date : ''
    }

    componentDidMount()
    {
        setInterval(() => {
            axios.get(`http://localhost:9000/`).then(res=>{
                console.log(res);
                this.setState({date : res.data});

            },10000);
        })
    }
    
    render()
    {
        return(
            <div>
            <h2>{this.state.date}</h2>
            </div>
        );
    }
}

export default FetchDateTime ;