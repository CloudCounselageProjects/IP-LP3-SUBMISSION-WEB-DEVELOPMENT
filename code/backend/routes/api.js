const express = require('express');
const router = express.Router();

router.get('/time', (req, res) => {
    const date = new Date();
    console.log("Date : " + date);
    res.json(
        {
            dayOfMonth: date.getDate(),
            weekday:date.getDay(),
            month:date.toLocaleString('dafault',{month:'long'}),
            year:date.getFullYear(),
            hour: date.getHours(),
            minutes: date.getMinutes()  
        }
    )
});

module.exports=router;
