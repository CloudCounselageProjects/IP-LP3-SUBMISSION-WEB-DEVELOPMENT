import {Card,CardGroup,CardSubtitle,Button, CardText,CardBody,CardImg,CardTitle,Row, Col,CardHeader, Container} from 'reactstrap';
import React ,{Component} from 'react';
import Book from './BookTable';
import Breakfast from './breakfast.jpg';
import Lunch from './lunch.jpg';
import Dinner from './dinner.jpg';
import MenuCard from './Menu';
class Cards extends Component{

render()
{
    return(
        
    <div className="service-outer" >
           
        <div className="specials">
               
            <h1 className="discover">Discover the magic!</h1><br/><hr />
            <Container>
                
            <Row>
            <Col md={4}>
            
            <Card style={{ width: '18rem', height:'22rem', borderRadius: 0 ,border: 'none' }}>
                <CardImg variant="top" src={Breakfast} />
                <CardBody>
                    <CardTitle>BreakFast</CardTitle>
                    <CardText>
                        "There Has Never Been A Sadness  That Can't Be Cured By Breakfast"<br/>
                       
                    </CardText>
                </CardBody>
            </Card>
            </Col>

            <Col md={4}>
            <Card style={{ width: '18rem', height:'22rem', borderRadius: 0 ,border: 'none'  }}>
                <CardImg variant="top" src={Lunch} />
                <CardBody>
                    <CardTitle>Lunch</CardTitle>
                    <CardText>
                        "One cannot Think Well, Love Well  or Sleep Well , If One Has Not Dined Well!"
                    </CardText>
                </CardBody>
            </Card>
            </Col>

            <Col md={4}>            
            <Card style={{ width: '18rem', height:'22rem', borderRadius: 0 ,border: 'none'  }}>
                <CardImg variant="top" src={Dinner} />
                <CardBody>
                    <CardTitle>Dinner</CardTitle>
                    <CardText>
                        "The Fondest Memories Are Made when Gathered Around The Table"
                    </CardText>
                </CardBody>
            </Card>
            </Col>
            </Row>
            </Container> 
           
        </div>

        <div className="menu-item">
            <h1 className="menus">Menus</h1><br /><hr />
            <h5 className="description">
                Take a look at our seasonally changing  menu.<br />
                We also have a varied wine list and a cocktail menu featuring old classics and our vibrant specialities.<br />
            </h5><br/><br />
            
           
        </div>
            
    </div>
        
    );
}


}

export default Cards;

