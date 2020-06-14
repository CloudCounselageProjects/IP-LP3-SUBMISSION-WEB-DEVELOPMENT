
import React, { Component } from 'react';
import {Card,CardBody} from 'reactstrap';
import {Form,FormCheck,FormControl,FormGroup,FormLabel,FormText,Button, ModalDialog, CloseButton} from 'react-bootstrap';
import { Modal  } from 'react-modal';
class Book extends Component{
    

    render()
    {
         return (
        
            <div className="container col-md-4">
                
                <div className="d-flex justify-content-center">
                <Form>
                    <h1>Book Your Table</h1>
                    <FormGroup controlId="formBasic">
                    <FormLabel>Name</FormLabel>
                    <FormControl type="text" placeholder="Enter Your Name" />
                    <FormLabel>Mobile No.</FormLabel>
                    <FormControl type="tel" placeholder="Enter Mobile Number" />
                    <FormText className="text-muted">
                        We'll never share your mobile no. with anyone else.<br />
                    </FormText>
                    <FormLabel>Date</FormLabel>
                    <FormControl type="date" placeholder=" " />
                    <FormLabel>No. of persons</FormLabel>
                    <FormControl type="number" placeholder="Enter No. of persons" />
                    </FormGroup>
                    <center>
                    <Button className="book-button" type="submit" >
                        Book Now
                    </Button></center>
                </Form>
                </div> 
                
            </div> 
     );
         }
  


}
export default Book;