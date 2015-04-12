var express = require('express');
var router = express.Router();
var request = require('request');

router.post('/desktop', function(req, res) {
    if (req.method == 'POST') {
		res.json({ message: "desktop POST" });
    }
    else
    {
        
    }
});

router.post('/webapp', function(req, res) {
    if (req.method == 'POST') {
		res.send('Username: ' + req.body.name);
    }
    else
    {
        
    }
});

module.exports = router;

