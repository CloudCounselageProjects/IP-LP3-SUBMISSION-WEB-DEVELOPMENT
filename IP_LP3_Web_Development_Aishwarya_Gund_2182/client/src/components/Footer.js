import React from 'react';
import { Link } from 'react-router-dom';

function Footer(props) {
    return(
    <div className="footer">
        <div className="container">
            <div className="row justify-content-center">             
                <div className="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul className="list-unstyled">
                        <li><Link to='/home'>Home</Link></li>
                        <li><Link to='/menu'>Menu</Link></li>
                        <li><Link to='/booktable'>Book Table</Link></li>
                        <li><Link to='/contactus'>Contact Us</Link></li>
                    </ul>
                </div>
                <div className="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
		             Opposite. to J.M. Road<br />
		             Shivajinagar Pune 05<br />
		              
		              <i className="fa fa-phone fa-lg"></i>: +852 1234 5678<br />
		              <i className="fa fa-fax fa-lg"></i>: +852 8765 4321<br />
		              <i className="fa fa-envelope fa-lg"></i>: <a href="mailto:confusion@food.net">
                         silverplatter@food.net</a>
                    </address><br />
                </div>
               
            </div>
            <div className="row justify-content-center">             
                <div className="col-auto">
                    <h5>© Copyright 2020 Silver Platter</h5>
                </div>
            </div>
        </div>
    </div>
    )
}

export default Footer;