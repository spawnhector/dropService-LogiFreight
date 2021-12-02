<style>
    .wrapper {
        width: 90%;
        position: relative;
        margin: 5% auto 0;
    }

    /**
    * Padding is set relative to the width
    * of the element, so here padding-top:60% is
    * a percentage of the width. This allows us 
    * to set the height as a ratio of the width
    *
    */
    .carousel1 {
        width: 100%;
        position: relative;
        padding-top: 60%;
        overflow: hidden;
    }

    .inner {
        width: 100%;
        height: 164px;
        /* position: absolute; */
        top: 0;
        left: 0;
    }

    /**
    * ==========================
    * Animation styles
    * 
    * Notes:
    * 1. We use z-index to position active slide1s in-front 
    * of non-active slide1s
    * 2. We set right:0 and left:0 on .slide1 to provide us with
    * a default positioning on both sides of the slide1. This allows 
    * us to trigger JS and CSS3 animations easily
    *
    */
    .slide1 {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1;
        opacity: 0;
    }

    .slide1.active,
    .slide1.left,
    .slide1.right {
        z-index: 2;
        opacity: 1;
    }

    /**
    * ==========================
    * JS animation styles
    * 
    * We use jQuery.animate to control the sliding animations
    * when CSS3 animations are not available. In order for
    * the next slide1 to slide1 in from the right, we need
    * to change the left:0 property of the slide1 to left:auto
    *
    */

    .js-reset-left {
        left: auto
    }

    /**
    * ==========================
    * CSS animation styles
    * 
    * .slide1.left and .slide1.right set-up
    * the to-be-animated slide1 so that it can slide1
    * into view. For example, a slide1 that is about 
    * to slide1 in from the right will:
    * 1. Be positioned to the right of the viewport (right:-100%)
    * 2. Slide1 in when the style is superseded with a more specific style (right:0%)
    *
    */
    .slide1.left {
        left: -100%;
        right: 0;
    }

    .slide1.right {
        right: -100%;
        left: auto;
    }

    .transition .slide1.left {
        left: 0%
    }

    .transition .slide1.right {
        right: 0%
    }

    /**
    * The following classes slide1 the previously active
    * slide1 out of view before positioning behind the 
    * currently active slide1
    *
    */
    .transition .slide1.shift-right {
        right: 100%;
        left: auto
    }

    .transition .slide1.shift-left {
        left: 100%;
        right: auto
    }

    /**
    * This sets the CSS properties that will animate. We set the
    * transition-duration property dynamically via JS.
    * We use the browser's default transition-timing-function
    * for simplicity's sake
    * 
    * It is important to note that we are using CodePen's inbuilt
    * CSS3 property prefixer. For your own projects, you will need
    * to prefix the transition and transform properties here to ensure
    * reliable support across browsers
    *
    */
    .transition .slide1 {
        transition-property: right, left, margin;
    }

    /**
    * ==========================
    * Indicators
    *
    */
    .indicators {
        width: 100%;
        position: absolute;
        bottom: 0;
        z-index: 4;
        padding: 0;
        text-align: center;
    }

    .indicators li {
        width: 13px;
        height: 13px;
        display: inline-block;
        margin: 5px;
        background: #fff;
        list-style-type: none;
        border-radius: 50%;
        cursor: pointer;
        transition: background 0.3s ease-out;
    }

    .indicators li.active {
        background: #93278f
    }

    .indicators li:hover {
        background-color: #2b2b2b
    }

    /**
    * ==========================
    * Arrows 
    *
    */
    .arrow {
        width: 20px;
        height: 20px;
        position: absolute;
        top: 50%;
        z-index: 5;
        border-top: 3px solid #fff;
        border-right: 3px solid #fff;
        cursor: pointer;
        transition: border-color 0.3s ease-out;
    }

    .arrow:hover {
        border-color: #93278f
    }

    .arrow-left {
        left: 20px;
        transform: rotate(225deg);
    }

    .arrow-right {
        right: 20px;
        transform: rotate(45deg);
    }

    /**
    * ==========================
    * For demo purposes only
    * 
    * Please note that the styles below are used
    * for the purposes of this demo only. There is no need
    * to use these in any of your own projects
    *
    */
    .slide1 {
        /* text-align: center; */
        /* padding-top: 25%; */
        /* background-size: cover; */
    }


    .slide1:nth-child(1) {
        /* background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/163697/slide1-1.jpg); */
    }

    .slide1:nth-child(2) {
        /* background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/163697/slide1-2.jpg); */
    }

    .slide1:nth-child(3) {
        /* background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/163697/slide1-3.jpg); */
    }

</style>
<div class="wrapper">

    <div class="carousel1">
        <div class="inner">
            @php
            $count = 1;
            @endphp
            @foreach ($preAlert as $item)
                @if ($count == 1)
                    @php
                        $class = 'slide1 active';
                    @endphp
                @else
                    @php
                        $class = 'slide1';
                    @endphp
                @endif
                <div class="{{$class}}">
                    <div class="card bg-primary shadow-inset border-light">
                        <div class="card-header border-bottom text-center">
                            <span class="d-block">
                                <span class="display-1 font-weight-bold">
                                    <span class="align-top font-medium">$</span>{{$item['invoice_total']}}
                                </span>
                            </span>
                        </div>
                        <div class="card-body ml-4">
                            <p>Package Name: {{$item['package_nm']}}</p>
                            <div class="flex">
                                <ul class="list-unstyled mb-4">
                                    <li class="list-item pb-2">
                                        <strong>Track #:</strong> {{$item['track_nm']}}
                                    </li>
                                    <li class="list-item pb-2">
                                        <strong>Courier:</strong> {{$item['courier']}}
                                    </li>
                                    <li class="list-item">
                                        <strong>Shipper:</strong> {{$item['shipper']}}
                                    </li>
                                </ul>
                                <ul class="list-unstyled mb-4 ml-4">
                                    <li class="list-item pb-2">
                                        <strong>Weight:</strong> {{$item['weight']}}
                                    </li>
                                    <li class="list-item pb-2">
                                        <strong>Content:</strong> {{$item['content']}}
                                    </li>
                                    @if ($item['promo'])
                                    <li class="list-item">
                                        <strong>Promo:</strong> {{$item['package_nm']}}
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    ++$count;
                @endphp
            @endforeach
        </div>
        <div class="arrow arrow-left"></div>
        <div class="arrow arrow-right"></div>
    </div>
</div>
<span class="ml-2" style="position: relative;top:-60px">We use an agile approach to test assumptions and connect with the needs of your audience early and often. Technology enables great experiences.</span>
<script>
    /*
     * We trigger the factory() function is different
     * ways to support modular JavaScript libraries. See
     * the 'Wrapping Up' section of the tutorial for
     * more information
     *
     */
    ;
    (function(factory) {

        if (typeof define === 'function' && define.amd) {
            define(['jquery'], factory);
        } else if (typeof exports !== 'undefined') {
            module.exports = factory(require('jquery'));
        } else {
            factory(jQuery);
        }

    })(function($) {

        /*
         * We define Zippy as a variable of type ‘function’. 
         * Here, we use an anonymous function to ensure 
         * that the logic inside the function is executed immediately. 
         *
         */
        var Zippy = (function(element, settings) {

            var instanceUid = 0;

            /*
             * The constructor function for Zippy
             *
             */
            function _Zippy(element, settings) {
                this.defaults = {
                    slide1Duration: '3000'
                    , speed: 500
                    , arrowRight: '.arrow-right'
                    , arrowLeft: '.arrow-left'
                };

                // We create a new property to hold our default settings after they
                // have been merged with user supplied settings
                this.settings = $.extend({}, this, this.defaults, settings);

                // This object holds values that will change as the plugin operates
                this.initials = {
                    currSlide1: 0
                    , $currSlide1: null
                    , totalSlide1s: false
                    , csstransitions: false
                };

                // Attaches the properties of this.initials as direct properties of Zippy
                $.extend(this, this.initials);

                // Here we'll hold a reference to the DOM element passed in
                // by the $.each function when this plugin was instantiated
                this.$el = $(element);

                // Ensure that the value of 'this' always references Zippy
                this.changeSlide1 = $.proxy(this.changeSlide1, this);

                // We'll call our initiator function to get things rolling!
                this.init();

                // A little bit of metadata about the instantiated object
                // This property will be incremented everytime a new Zippy carousel is created
                // It provides each carousel with a unique ID
                this.instanceUid = instanceUid++;
            }

            return _Zippy;

        })();

        /**
         * Called once per instance
         * Calls starter methods and associate the '.zippy-carousel' class
         * @params void
         * @returns void
         *
         */
        Zippy.prototype.init = function() {
            //Test to see if cssanimations are available
            this.csstransitionsTest();
            // Add a class so we can style our carousel
            this.$el.addClass('zippy-carousel');
            // Build out any DOM elements needed for the plugin to run
            // Eg, we'll create an indicator dot for every slide1 in the carousel
            this.build();
            // Eg. Let the user click next/prev arrows or indicator dots
            this.events();
            // Bind any events we'll need for the carousel to function
            this.activate();
            // Start the timer loop to control progression to the next slide1
            this.initTimer();
        };

        /**
         * Appropriated out of Modernizr v2.8.3
         * Creates a new DOM element and tests existence of properties on it's
         * Style object to see if CSSTransitions are available
         * @params void
         * @returns void
         *
         */
        Zippy.prototype.csstransitionsTest = function() {
            var elem = document.createElement('modernizr');
            //A list of properties to test for
            var props = ["transition", "WebkitTransition", "MozTransition", "OTransition", "msTransition"];
            //Iterate through our new element's Style property to see if these properties exist
            for (var i in props) {
                var prop = props[i];
                var result = elem.style[prop] !== undefined ? prop : false;
                if (result) {
                    this.csstransitions = result;
                    break;
                }
            }
        };

        /**
         * Add the CSSTransition duration to the DOM Object's Style property
         * We trigger this function just before we want the slide1s to animate
         * @params void
         * @returns void
         *
         */
        Zippy.prototype.addCSSDuration = function() {
            var _ = this;
            this.$el.find('.slide1').each(function() {
                this.style[_.csstransitions + 'Duration'] = _.settings.speed + 'ms';
            });
        }

        /**
         * Remove the CSSTransition duration from the DOM Object's style property
         * We trigger this function just after the slide1s have animated
         * @params void
         * @returns void
         *
         */
        Zippy.prototype.removeCSSDuration = function() {
            var _ = this;
            this.$el.find('.slide1').each(function() {
                this.style[_.csstransitions + 'Duration'] = '';
            });
        }

        /**
         * Creates a list of indicators based on the amount of slide1s
         * @params void
         * @returns void
         *
         */

        //  note: add back "indicators" to <ul class> to get back the indicator 
        Zippy.prototype.build = function() {
            var $indicators = this.$el.append('<ul hidden class="indicators" >').find('.indicators');
            this.totalSlide1s = this.$el.find('.slide1').length;
            for (var i = 0; i < this.totalSlide1s; i++) $indicators.append('<li data-index=' + i + '>');
        };

        /**
         * Activates the first slide1
         * Activates the first indicator
         * @params void
         * @returns void
         *
         */
        Zippy.prototype.activate = function() {
            this.$currSlide1 = this.$el.find('.slide1').eq(0);
            this.$el.find('.indicators li').eq(0).addClass('active');
        };

        /**
         * Associate event handlers to events
         * For arrow events, we send the placement of the next slide1 to the handler
         * @params void
         * @returns void
         *
         */
        Zippy.prototype.events = function() {
            $('body')
                .on('click', this.settings.arrowRight, {
                    direction: 'right'
                }, this.changeSlide1)
                .on('click', this.settings.arrowLeft, {
                    direction: 'left'
                }, this.changeSlide1)
                .on('click', '.indicators li', this.changeSlide1);
        };

        /**
         * TIMER
         * Resets the timer
         * @params void
         * @returns void
         *
         */
        Zippy.prototype.clearTimer = function() {
            if (this.timer) clearInterval(this.timer);
        };

        /**
         * TIMER
         * Initialise the timer
         * @params void
         * @returns void
         *
         */
        Zippy.prototype.initTimer = function() {
            this.timer = setInterval(this.changeSlide1, this.settings.slide1Duration);
        };

        /**
         * TIMER
         * Start the timer
         * Reset the throttle to allow changeSlide1 to be executable
         * @params void
         * @returns void
         *
         */
        Zippy.prototype.startTimer = function() {
            this.initTimer();
            this.throttle = false;
        };

        /**
         * MAIN LOGIC HANDLER
         * Triggers a set of subfunctions to carry out the animation
         * @params	object	event
         * @returns void
         *
         */
        Zippy.prototype.changeSlide1 = function(e) {
            //Ensure that animations are triggered one at a time
            if (this.throttle) return;
            this.throttle = true;

            //Stop the timer as the animation is getting carried out
            this.clearTimer();

            // Returns the animation direction (left or right)
            var direction = this._direction(e);

            // Selects the next slide1
            var animate = this._next(e, direction);
            if (!animate) return;

            //Active the next slide1 to scroll into view
            var $nextSlide1 = this.$el.find('.slide1').eq(this.currSlide1).addClass(direction + ' active');

            if (!this.csstransitions) {
                this._jsAnimation($nextSlide1, direction);
            } else {
                this._cssAnimation($nextSlide1, direction);
            }
        };

        /**
         * Returns the animation direction, right or left
         * @params	object	event
         * @returns strong	animation direction
         *
         */
        Zippy.prototype._direction = function(e) {
            var direction;

            // Default to forward movement
            if (typeof e !== 'undefined') {
                direction = (typeof e.data === 'undefined' ? 'right' : e.data.direction);
            } else {
                direction = 'right';
            }
            return direction;
        };

        /**
         * Updates our plugin with the next slide1 number
         * @params	object	event
         * @params	string	animation direction
         * @returns boolean continue to animate?
         *
         */
        Zippy.prototype._next = function(e, direction) {

            // If the event was triggered by a slide1 indicator, we store the data-index value of that indicator
            var index = (typeof e !== 'undefined' ? $(e.currentTarget).data('index') : undefined);

            //Logic for determining the next slide1
            switch (true) {
                //If the event was triggered by an indicator, we set the next slide1 based on index
                case (typeof index !== 'undefined'):
                    if (this.currSlide1 == index) {
                        this.startTimer();
                        return false;
                    }
                    this.currSlide1 = index;
                    break;
                case (direction == 'right' && this.currSlide1 < (this.totalSlide1s - 1)):
                    this.currSlide1++;
                    break;
                case (direction == 'right'):
                    this.currSlide1 = 0;
                    break;
                case (direction == 'left' && this.currSlide1 === 0):
                    this.currSlide1 = (this.totalSlide1s - 1);
                    break;
                case (direction == 'left'):
                    this.currSlide1--;
                    break;
            }
            return true;
        };

        /**
         * Executes the animation via CSS transitions
         * @params	object	Jquery object the next slide1 to slide1 into view
         * @params	string	animation direction
         * @returns void
         *
         */
        Zippy.prototype._cssAnimation = function($nextSlide1, direction) {
            //Init CSS transitions
            setTimeout(function() {
                this.$el.addClass('transition');
                this.addCSSDuration();
                this.$currSlide1.addClass('shift-' + direction);
            }.bind(this), 100);

            //CSS Animation Callback
            //After the animation has played out, remove CSS transitions
            //Remove unnecessary classes
            //Start timer
            setTimeout(function() {
                this.$el.removeClass('transition');
                this.removeCSSDuration();
                this.$currSlide1.removeClass('active shift-left shift-right');
                this.$currSlide1 = $nextSlide1.removeClass(direction);
                this._updateIndicators();
                this.startTimer();
            }.bind(this), 100 + this.settings.speed);
        };

        /**
         * Executes the animation via JS transitions
         * @params	object	Jquery object the next slide1 to slide1 into view
         * @params	string	animation direction
         * @returns void
         *
         */
        Zippy.prototype._jsAnimation = function($nextSlide1, direction) {
            //Cache this reference for use inside animate functions
            var _ = this;

            // See CSS for explanation of .js-reset-left
            if (direction == 'right') _.$currSlide1.addClass('js-reset-left');

            var animation = {};
            animation[direction] = '0%';

            var animationPrev = {};
            animationPrev[direction] = '100%';

            //Animation: Current slide1
            this.$currSlide1.animate(animationPrev, this.settings.speed);

            //Animation: Next slide1
            $nextSlide1.animate(animation, this.settings.speed, 'swing', function() {
                //Get rid of any JS animation residue
                _.$currSlide1.removeClass('active js-reset-left').attr('style', '');
                //Cache the next slide1 after classes and inline styles have been removed
                _.$currSlide1 = $nextSlide1.removeClass(direction).attr('style', '');
                _._updateIndicators();
                _.startTimer();
            });
        };

        /**
         * Ensures the slide1 indicators are pointing to the currently active slide1
         * @params	void
         * @returns	void
         *
         */
        Zippy.prototype._updateIndicators = function() {
            this.$el.find('.indicators li').removeClass('active').eq(this.currSlide1).addClass('active');
        };

        /**
         * Initialize the plugin once for each DOM object passed to jQuery
         * @params	object	options object
         * @returns void
         *
         */
        $.fn.Zippy = function(options) {

            return this.each(function(index, el) {

                el.Zippy = new Zippy(el, options);

            });

        };


    });

    // Custom options for the carousel
    var args = {
        arrowRight: '.arrow-right', //A jQuery reference to the right arrow
        arrowLeft: '.arrow-left', //A jQuery reference to the left arrow
        speed: 1000, //The speed of the animation (milliseconds)
        slide1Duration: 4000 //The amount of time between animations (milliseconds)
    };

    $('.carousel1').Zippy(args);

</script>
