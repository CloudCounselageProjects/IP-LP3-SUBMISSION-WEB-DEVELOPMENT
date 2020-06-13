import React from 'react';
import {Card, CardBody, CardHeader} from 'reactstrap';

function About() {
    return(
        <div className="container">
            <div className="row mt-5" >
                <div className="col-12">
                    <h2>About Us</h2>
                    <hr />
                </div>                
            </div>
            <div className="row row-content">
            <div className="col-12 mb-5">
                    <Card>
                        <CardBody className="bg-faded">
                            <blockquote className="blockquote">
                                <p className="mb-0 font-italic">Time is free, but it’s priceless. You can’t own it, but you can use it. You can’t keep it, but you can spend it. Once you’ve lost it you can never get it back.</p>
                                <footer className="blockquote-footer"> Harvey Mackay
                                </footer>
                            </blockquote>
                        </CardBody>
                    </Card>
                </div>
                <div className="col-12 col-md-6">
                    <h3>Our History</h3>
                    <p>Started in 2010, TIME.pvt.ltd quickly established itself as a icon in India. With its unique brand of world clocks that can be found nowhere else.</p>
                    <p>The Company traces its humble beginnings to <em>The Timex</em>, a successful chain started by our CEO, Mrs.Rutuja Patil, that featured for the first time the world's best wall clocks.</p>
                    
                </div>
                <div className="col-12 col-md-5 m-3">
                    <Card>
                        <CardHeader className="bg-dark text-white">Facts At a Glance</CardHeader>
                        <CardBody>
                            <dl className="row p-1">
                                <dt className="col-6">Started</dt>
                                <dd className="col-6">15 Jun. 2010</dd>
                                <dt className="col-6">Major Stake Holder</dt>
                                <dd className="col-6">World Watches Inc.</dd>
                                <dt className="col-6">Last Year's Turnover</dt>
                                <dd className="col-6">$1,250,375</dd>
                                <dt className="col-6">Employees</dt>
                                <dd className="col-6">30</dd>
                            </dl>
                        </CardBody>
                    </Card>
                </div>
            </div>
        </div>
    );
}

export default About;    