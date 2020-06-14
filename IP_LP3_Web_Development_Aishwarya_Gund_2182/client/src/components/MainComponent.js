import React, { Component } from 'react';
import Header from './Header';
import Footer from './Footer';
import Cards from './Cards';
import MenuCard from './Menu';
import About from './AboutUs';
import { Switch, Route, Redirect } from 'react-router-dom';
import Book from './BookTable';
import {Card,CardGroup,CardSubtitle,Button, CardText,CardBody,CardImg,CardTitle,CardFooter} from 'reactstrap';

class Main extends Component {

  render() {

    const CardComponent = () => {
      return(
          <MenuCard />
          
      );
    }
      const BookTable = () => {
        return(
            <Book />
            
        ); 
        }   
       
        const AboutUs = () =>{
          return(
            <About />
          );
        }
   
    
    return (
      <div>
      <Header/>
      <div className="row-content">
        <Switch>
     
            <Route path="/menu" component={CardComponent}/>
            <Route path="/booktable" component={BookTable} />
            <Route path="/aboutus" component={AboutUs} />
            <Cards />
            <Redirect to="/home" />
            
        </Switch>
        </div>
       <Footer />
      
     
     </div>
    );
  }
}

export default Main;