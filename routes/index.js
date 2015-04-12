var express = require('express');
var bodyParser = require('body-parser')
var router = express.Router();

router.use(bodyParser.json());

router.post('/webapp', function(req, res) {
    if (req.method == 'POST') {
		res.json({ message: "POST" });
    }
    else
    {
        res.json({ message: "GET" });
    }
});

module.exports = router;

