//Beacuse of Google API Key requirement, I am not able to implement right now,I will use this code Later
import { Map, GoogleApiWrapper } from 'google-maps-react';
import React, { Component } from 'react';

const mapStyles = {
    width: '500px',
    height: '500px',
  };

class MapComp extends Component {
    render() {
        <Map 
            google={this.props.google}
            zoom ={8}
            style={mapStyles}
            initialCenter={{lat: 47.444, lng: -122.176}}
        ></Map>
    }
}

export default GoogleApiWrapper({
    apiKey: 'TOKEN HERE'
  })(MapContainer);