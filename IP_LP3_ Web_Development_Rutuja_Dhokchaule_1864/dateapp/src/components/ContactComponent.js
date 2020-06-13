import React, { Component } from 'react';

class Contact extends Component {

    constructor(props) {
        super(props);
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    handleSubmit(values) {
        console.log('Current State is: ' + JSON.stringify(values));
        alert('Current State is: ' + JSON.stringify(values));
        this.props.resetFeedbackForm();
        // event.preventDefault();
    }

    render() {
        return(
            <div className="container">
                <div className="col-12 mt-5">
                    <h3>Contact Us</h3>
                    <hr />
                </div>

                <div className="row row-content">
                    <div className="col-12">
                    <h3 className="mb-4">Location Information</h3>
                    </div>
                    <div className="col-12 col-sm-4 border-right">
                        <h5>Our Address</h5>
                        <address>
                        121, Karve Road<br />
                        Kothrud, Pune<br />
                        Maharashtra, India<br />
                        <i className="fa fa-phone"></i>: +91 8767564534<br />
                        <i className="fa fa-fax"></i>: +852 7676 1234<br />
                        <i className="fa fa-envelope"></i>: <a href="mailto:Time.pvt@Time.net">Time.pvt@Time.net</a>
                        </address>
                        
                        <div className="btn-group" role="group">
                            <a role="button" className="btn btn-primary" href="tel:+91 8767564534"><i className="fa fa-phone"></i> Call</a>
                            <a role="button" className="btn btn-info"><i className="fa fa-skype"></i> Skype</a>
                            <a role="button" className="btn btn-success" href="mailto:Time.pvt@Time.net"><i className="fa fa-envelope-o"></i> Email</a>
                        </div>
                    </div>
                    <div className="col-12 col-sm-4 offset-sm-1 img-fluid img-responsive">
                        <h5>Map of our Location</h5>
                        <img style={{width: 450, height: 'auto'}} src="https://www.google.com/maps/d/thumbnail?mid=1iwRGIQxDDxc0-SiSEzJbn3eupKc&hl=en" alt="Map should be here"/>                 
                    </div>
                </div>
            </div>
        );
    }
}

export default Contact;