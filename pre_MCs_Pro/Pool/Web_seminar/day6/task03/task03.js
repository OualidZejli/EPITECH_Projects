module.exports = {
    countGs: function(word) {
        let x;
        x = (word.match(/G/g) || []).length;
        return(x);
    }
}