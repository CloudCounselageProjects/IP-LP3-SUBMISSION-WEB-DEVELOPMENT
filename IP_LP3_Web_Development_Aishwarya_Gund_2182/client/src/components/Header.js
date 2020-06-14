import { Nav, Navbar, NavbarBrand, NavbarToggler, Collapse, NavItem, Jumbotron,Card, CardHeader,CardTitle,CardText, CardBody } from 'reactstrap';
import { NavLink } from 'react-router-dom';
import React ,{Component} from 'react';

import FetchDateTime from './DateTimeComponent';
class Header extends Component {
    constructor(props) {
        super(props);
    
        this.toggleNav = this.toggleNav.bind(this);
        this.state = {
          isNavOpen: false
        };
      }

      toggleNav() {
        this.setState({
          isNavOpen: !this.state.isNavOpen
        });
      }

    render() {
        return(
            <div>
                <Navbar expand="md">
                    <div className="container">
                        <NavbarToggler onClick={this.toggleNav} />
                        
                        <Collapse isOpen={this.state.isNavOpen} navbar>
                            <Nav navbar>
                            <NavItem>
                                <NavLink className="nav-link"  to='/home'> Home</NavLink>
                            </NavItem>
                            <NavItem>
                                <NavLink className="nav-link" to='/menu'>Menu</NavLink>
                            </NavItem>
                            <NavItem>
                                <NavLink className="nav-link"  to='/booktable'>Book Table</NavLink>
                            </NavItem>
                            <NavItem>
                                <NavLink className="nav-link" to='/aboutus'> About Us</NavLink>
                            </NavItem>
                            </Nav>
                        </Collapse>
                    </div>
                </Navbar>
                <Jumbotron>
                    <div className="container">
                        
                         <div className="row"> 
                        
                            <div className="col-sm-6">
                            <Card width="100%" style={{flex:1, backgroundColor:'black', color:'white'}} className="text-center col-md-5">
                            <CardHeader><h3>Live Date</h3></CardHeader>
                                <CardBody>  
                                <CardText>
                                    <FetchDateTime />
                                </CardText>
                                </CardBody>
  
                            </Card>
                       
                            </div>  
                            <div className="col-sm-6">
                       
                               <p className="resto_name">Silver Platter</p>
                               <center><h3>The Indian Kitchen!</h3></center>
                              
                               
                            
                            </div>  
                        
                                       
                        </div>
                    </div>
                </Jumbotron>
            </div>
        );
    }
}

export default Header;