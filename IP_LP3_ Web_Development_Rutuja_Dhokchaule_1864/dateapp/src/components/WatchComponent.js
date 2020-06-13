import React, { Component } from 'react';
import { Media, Button,Modal,ModalBody, ModalHeader} from 'reactstrap';

class Menu extends Component {
    constructor(props) {
        super(props);

        this.state= {
            isBuyOpen :false,
        };
        this.toggleBuy = this.toggleBuy.bind(this);
    }
    toggleBuy() {
        this.setState({
            isBuyOpen: !this.state.isBuyOpen
        });
    }
    render() {
    
    const menu = this.props.watches.map((watch) => {
        return (
            <>
            <div key={watch.id} className="col-sm-6 col-md-12 mt-5 border shadow p-3 mb-5 bg-white rounded" >
            <Media tag="li" className="m-1">
                <Media left  className="img-fluid">
                    <Media object src={watch.image} style={{width: 300, height: 'auto'}} alt={watch.name} />
                </Media>

                <Media body className="ml-5 mr-4">
                    <Media heading>{watch.name}</Media>
                    <p>{watch.description}</p>
                    <h5 >Rs.{watch.price}</h5>
                    <Button outline>Read More</Button>
                </Media>

                <Media right middle className="mt-5">
                    <Button className="btn"><span className="fa fa-bookmark fa"></span> Add to Cart</Button>
                    <br></br>
                    <br></br>
                    <Button className="btn" onClick= {this.toggleBuy}><span className="fa fa-tag fa"></span> Buy Item</Button>
                </Media>
            </Media>
            </div>
            <Modal isOpen={this.state.isBuyOpen} toggle={this.toggleBuy}>
                <ModalHeader>
                    Buy An Item
                </ModalHeader>
                <ModalBody>
                    <h5>Our Precious Customer,<br></br> We are really sorry for your inconvenience! Our online payment feature is under construction right now! So stay tuned,and we appreciate your time!<br></br> Thank you! </h5>
                </ModalBody>
            </Modal>
        </>
        );
    });

    return (
        <div className="container">
        <div className="row">
            <Media list>
                {menu}
            </Media>
        </div>
        </div>
    );
    }
}


export default Menu;