//Rest Apli which satisfies get request to return date
var express = require('express');
var router = express.Router();

router.get('/', (req, res) => {
    res.json(new Date().toLocaleString());
});

module.exports = router;