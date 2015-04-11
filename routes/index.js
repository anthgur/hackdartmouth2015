var express = require('express');
var router = express.Router();
 
router.get('/', function(req, res) {
	if(req.method == "POST" ) {
		res.json({ message: "Oh hai" });
	}
	else
		res.json({ message: "Goodbye" });
});

module.exports = router;

