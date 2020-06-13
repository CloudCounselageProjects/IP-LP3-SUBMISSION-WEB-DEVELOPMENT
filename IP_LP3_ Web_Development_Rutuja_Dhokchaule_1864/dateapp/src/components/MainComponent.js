import React, { Component } from 'react';
import Header from './HeaderComponent';
import Footer from './FooterComponent';
import Menu from './WatchComponent';
import { WATCHES } from '../shared/watches';
import Contact from './ContactComponent';
import About from './AboutComponent';
import { Switch, Route, Redirect} from 'react-router-dom';

class Main extends Component{

  constructor(props) {
    super(props);
    this.state = {
      watches: WATCHES
    };
  }

  render(){
    return(
      <div>
        <Header></Header>
        <Switch>
          <Route path="/home" component={()=><Menu watches={this.state.watches}/>}/>
          <Route exact path="/contactus" component={()=><Contact/>}/>
          <Route exact path="/aboutus" component={()=><About/>}/>
          <Redirect to="/home" />
        </Switch>
        <Footer></Footer>
      </div>
    );
  }
}

export default Main;
