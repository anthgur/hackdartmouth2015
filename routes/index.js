var express = require('express');
var router = express.Router();

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

