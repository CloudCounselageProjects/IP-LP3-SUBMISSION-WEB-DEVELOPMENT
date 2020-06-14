import React from 'react';
import MH from './mh.jpg';
import North from './north.jpg';
import Raj from './rajsthani.jpg';
import Gujrati from './gujrati.jpg';

function MenuCard() {
    return(
      
      <center>
      <div className="col-12 col-md-8"> <br/> 
      <center><h1>Menu Card</h1></center><hr/>
      <ul class="list-unstyled mt-1" >
     
      
      <li class="media">
        <img src={MH} height="190px" width="220px" class="mr-3" alt="No Preview Available" />
        <div class="media-body">
          <h5 class="mt-1 mb-1"><u>Maharashtrian Thali</u></h5><br/>
          If you’re craving for delicious Vada Pav, wholesome meal of Pav Bhaji, spicy Misal Pav, comforting Puran Poli, Pithla Bhakri, Poha and whatnot,
           then we feel you. You might be missing your mother’s homemade Maharashtrian food. But don’t worry. 
            So it’s high time you head to our restaurant in Pune to fulfil your Maharashtrian food cravings.
        </div>
      </li>
     
      <li class="media my-4">
        <img src={North} class="mr-3" height="190px" width="220px" alt="No Preview Available"/>
        <div class="media-body">
          <h5 class="mt-mb-1"><u>North Indian Cuisine</u></h5><br/>
          Food of the Northern lands consists of chunks of meat and vegetables marinated in spices and herbs. 
          Their gravies are creamy and robust with flavour. If you love North-Indian food and you really want to dine at 
          best places then worry not! We’ve narrowed down the best North-Indian food restaurants in Chennai exclusively 
          for the food lover in you!
        </div>
      </li>
      <li class="media my-4">
        <img src={Raj} class="mr-3" height="190px" width="220px" alt="No Preview Available"/>
        <div class="media-body">
          <h5 class="mt-0 mb-1"><u>Rajasthani Cuisine</u></h5><br/>
          To be able to relish the lip-smacking local cuisine  here are the most popular
           Rajasthani dishes and their dominant flavors. Pick your favorites and delight your taste buds with the 
           delicious dessert fare.
        </div>
      </li>
      <li class="media my-4">
        <img src={Gujrati} class="mr-3" height="190px" width="220px" alt="No Preview Available"/>
        <div class="media-body">
          <h5 class="mt-0 mb-1"><u>Gujrati Food</u></h5><br/>
          They say that a Gujarati carries with him the distinctive flavours of his cuisine to every place he goes.
           It doesn't matter what dish he prepares, because one can taste the signature Gujarati tadka - cumin seeds, 
           mustard seeds, curry leaves and chilli powder tempered in ghee. From Fafda jalebi to undhiyu and thepla, 
          Gujarati delicacies are loved throughout the world. So here’s bringing you some popular Gujarati dishes.
        </div>
      </li>
      <br/>
    </ul>
    
    </div>
    </center>
    
    );
}

export default MenuCard;   