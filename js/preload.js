$.fn.preload = function() {
    this.each(function(){
        $('<img/>')[0].src = this;
    });
}

// Usage:

$(['../images/aka/aka1.2.jpg']).preload();