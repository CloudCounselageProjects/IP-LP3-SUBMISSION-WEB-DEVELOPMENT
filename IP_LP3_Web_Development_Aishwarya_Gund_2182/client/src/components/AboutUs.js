import React, {Component} from 'react';
import {Card,CardHeader,CardBody,CardText} from 'reactstrap';

class About extends Component{
    render()
    {
        return(
                
               <div className="about">
                   <div className="col-md-8">
                   <Card  style={{width: '30rem', height:'20rem',backgroundColor:'#424242', color:'white'}} className="text-center col-md-6">
                            
                                <CardBody>  
                                <CardText>
                                    <h5 style={{color:'white',fontFamily:'georgia'}}>Welcome to Silver Platter</h5><br/>
                                <CardHeader><h2 style={{color:'#FFC107',fontFamily:'georgia'}}>A Fascinating Flavor<br/>Experience</h2></CardHeader><br/>
                                <h6 style={{color:'white',fontFamily:'georgia'}}>Restaurant Hours<br/>
                                Monday-Friday : 10:00AM-22:00AM<br/>
                                Saturday-Sunday: 08:00AM-22:00AM</h6>
                                </CardText>
                                </CardBody>
  
                            </Card>
                            
                   </div>
            
                   
                </div>
              
            
        );

    }
       
   
}

export default About;