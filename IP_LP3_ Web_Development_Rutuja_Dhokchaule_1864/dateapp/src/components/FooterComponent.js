import React from 'react';

function Footer(props) {
    return(
    <div className="footer">
        <div className="container">
            <div className="row justify-content-center">           
                <div className="col-12 col-sm-4 align-self-center">
                <h3 className="text-center text">Enjoy, And Visit Again!</h3>  
                    <div className="text-center">
                        <a className="btn btn-social-icon btn-google m-2" href="http://google.com/+"><i className="fa fa-google-plus"></i></a>
                        <a className="btn btn-social-icon btn-facebook m-1" href="http://www.facebook.com/profile.php?id="><i className="fa fa-facebook"></i></a>
                        <a className="btn btn-social-icon btn-linkedin m-1" href="http://www.linkedin.com/in/"><i className="fa fa-linkedin"></i></a>
                        <a className="btn btn-social-icon btn-twitter m-1" href="http://twitter.com/"><i className="fa fa-twitter"></i></a>
                        <a className="btn btn-social-icon btn-google m-1" href="http://youtube.com/"><i className="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div className="row justify-content-center mt-2">             
                <div className="col-auto">
                    <p>© Copyright 2020 Time Corporation Private Limited.</p>
                </div>
            </div>
        </div>
    </div>
    )
}

export default Footer;