import React, { Component } from 'react';
import {Navbar,NavbarBrand ,Nav , NavbarToggler, Collapse, NavItem  , Jumbotron  ,Button ,Modal,ModalBody, ModalHeader, FormGroup, Form, Input, Label} from 'reactstrap';
import {NavLink} from 'react-router-dom';
import FetchDate from './FetchDateComponent';

class Header extends Component {
  constructor(props) {
    super(props);

    this.state= {
        isNavOpen : false,
    };
    this.toggleNav = this.toggleNav.bind(this);
    this.toggleModal = this.toggleModal.bind(this);
    this.handleLogin = this.handleLogin.bind(this);
  }
  toggleNav() {
    this.setState({
        isNavOpen: !this.state.isNavOpen
    });
  }

  toggleModal() {
    this.setState({
        isModalOpen: !this.state.isModalOpen
    });
  }

  handleLogin(event) {
    this.toggleModal();
    alert("Username: "+ this.username.value + "Password: "+ this.password.value + "Remember : " + this.remember.checked);
    event.preventDefault();
  }
  render() {
    return(
    <React.Fragment>
      <Navbar dark expand="md">
        <div className="container">
            <NavbarToggler onClick={this.toggleNav}/>
            <NavbarBrand href="/" className="textdate">Time Co.Ltd.</NavbarBrand>
            <Collapse isOpen={this.state.isNavOpen} navbar> 
              <Nav navbar>
                  <NavItem>
                      <NavLink className="nav-link" to="/home"><span> Home</span></NavLink>
                  </NavItem>
                  <NavItem>
                      <NavLink className="nav-link" to="/contactus"><span> Contact Us</span></NavLink>
                  </NavItem>
                  <NavItem>
                      <NavLink className="nav-link" to="/aboutus"><span> About Us</span></NavLink>
                  </NavItem>
              </Nav>
              <Nav className="ml-auto" navbar>
                      <NavItem>
                          <Button outline onClick= {this.toggleModal}>Login</Button>
                      </NavItem>
                  </Nav>
          </Collapse>
        </div>
      </Navbar>
      <Jumbotron>
           <div className="container">
               <div className="row row-header">
                  <div className="col-12 text-center ">
                    <FetchDate></FetchDate>
                  </div>
                  <div className="col-12 text-center" >
                      <h1  className="texttime">Time</h1>
                      <br></br>
                      <h5 >"More than Just Watch !"</h5>
                      <hr color="grey"></hr>
                      <p>"Your greatest resource is your time!" So use your resource wisely.The person who loves time,adores time and respects time,will surely love our watches.We have a great variety of watches like Retro Lovers,Vintage ,Modern,Minimalistic,designer.etc. Everything is here,Lets go and have FUN! We will there for You ;-)</p>
                  </div>
               </div>
           </div>
       </Jumbotron>
       <Modal isOpen={this.state.isModalOpen} toggle={this.toggleModal}>
          <ModalHeader>Login</ModalHeader>
          <ModalBody>
              <Form onSubmit={this.handleLogin}>
                  <FormGroup>
                      <Label htmlFor="username">Username</Label>
                      <Input type="text" id="username" name="username" innerRef={(input)=>this.username = input}/>
                  </FormGroup>
                  <FormGroup>
                      <Label htmlFor="password">Password</Label>
                      <Input type="password" id="password" name="password" innerRef={(input)=>this.password = input}/>
                  </FormGroup>
                  <FormGroup check>
                      <Label check>
                          <Input type="checkbox" name="remember" innerRef={(input)=>this.remember = input}/>
                          Remember Me
                      </Label>
                  </FormGroup>
                  <Button type="submit" value="submit" color="primary">Login</Button>
              </Form>
          </ModalBody>
        </Modal>
    </React.Fragment>
    );
  }
}

export default Header;