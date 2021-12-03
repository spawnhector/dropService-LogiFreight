<div>
    <div class="row mb-5">
        <div class="col-12 col-md-6">
            <div class="form-group mb-4">
                <input wire:model='package_nm' type="text" class="form-control" aria-describedby="emailHelp" placeholder="Package Name"> 
            </div>
            <div class="form-group mb-4">
                <input wire:model='track_no' type="text" class="form-control" aria-describedby="emailHelp" placeholder="Tracking No."> 
            </div>
            <div class="form-group mb-4">
                <input wire:model='shipper' type="text" class="form-control" aria-describedby="emailHelp" placeholder="Shipper"> 
            </div>
            <div class="form-group mb-4">
                <input wire:model='contents' type="text" class="form-control" aria-describedby="emailHelp" placeholder="Choose Content"> 
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group mb-4">
                <input wire:model='invoice_total' type="text" class="form-control" aria-describedby="emailHelp" placeholder="Invoice Total"> 
            </div>
            <div class="form-group  mb-4">
                <select wire:model='courier' class="custom-select mr-sm-2" id="inlineFormCustomSelectPref">
                    <option value="">Choose Courier</option>
                    <option value="Amazon Logistics">Amazon Logistics</option>
                    <option value="China Post">China Post</option>
                    <option value="DHL">DHL</option>
                    <option value="DSG">DSG</option>
                    <option value="FedEx">FedEx</option>
                    <option value="Hong Kong Post">Hong Kong Post</option>
                    <option value="IBC">IBC</option>
                    <option value="Korea Post">Korea Post</option>
                    <option value="Lasership">Lasership</option>
                    <option value="Major Express">Major Express</option>
                    <option value="Royal Mail">Royal Mail</option>
                    <option value="TRX">TRX</option>
                    <option value="UPS">UPS</option>
                    <option value="US Postage">US Postage</option>
                    <option value="USPS">USPS</option>
                </select>
            </div>
            <div class="form-group mb-4">
                <input wire:model='weight' type="text" class="form-control" aria-describedby="emailHelp" placeholder="Weight Lbs"> 
            </div>
            <div class="form-group mb-4">
                <input wire:model='promo_code' type="text" class="form-control" aria-describedby="emailHelp" placeholder="Promotional Code (Optional)"> 
            </div>
        </div>
    </div>
    <hr>
    <span class="position-relative top-2 left-2 flex" style="top: 61px; left: 31px;">
        <span class="position-relative top-2 ">Drag & drop your files here or</span>
        <div class="custom-file w-50 left-4">
            
            <input wire:model='file' type="file" class="custom-file-input" id="customFile" aria-label="File upload">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
    </span>
    <div id='drop_content'>
        <span>Drop image here.</span>
        
        <div class='ml-4' wire:loading wire:target="file">Uploading...</div>
    </div>
    <div class="flex">
        <button wire:click='createPreAlert()' type="submit" class="btn btn-pill btn-primary mt-4" type="button">Create Pre-Alert</button>
        {{-- <span  wire:target="slideSetting" wire:loading.class.remove="fas fa-cog" class="fas fa-cog"></span> --}}
        <span  wire:target="createPreAlert" wire:loading.class="loader" class=""></span>
        <button class="btn btn-pill btn-primary mt-4 ml-2" type="button">Cancel</button>
    </div>
</div>
<script>
    var target = document.getElementById('drop_content');
    var debugVar;
    var currentFiles;


    var MAX_WIDTH = 0;
    function render(src, MAC_WIDTH){
        var image = new Image();
        image.onload = function(){
        changeMaxMin(image.width, 10)
            var canvas = document.getElementById("myCanvas");
            if(image.width > MAX_WIDTH) {
                image.height *= MAX_WIDTH / image.width;
                image.width = MAX_WIDTH;
            }
            // var ctx = canvas.getContext("2d");
            // ctx.clearRect(0, 0, canvas.width, canvas.height);
            // canvas.width = image.width;
            // canvas.height = image.height;
            // ctx.drawImage(image, 0, 0, image.width, image.height);
        };
        image.src = src;
    }


    function loadImage(src){
        //	Prevent any non-image file type from being read.
    //   console.log(src.type);
        if(!src.type.match(/image.*/)){
            console.log("The dropped file is not an image: ", src.type);
        alert("Please drop an image, not a "+src.type+". Thanks.")
            return;
        }

        //	Create our FileReader and run the results through the render function.
        var reader = new FileReader();
        reader.onload = function(e){
            render(e.target.result);
        };
    
        reader.readAsDataURL(src);
    }


    target.addEventListener("dragover", function(e){
    $(target).addClass("highlight");
    e.preventDefault();
    }, true);

    target.addEventListener("drop", function(e){
        e.preventDefault(); 
    var files = e.dataTransfer.files[0];
        loadImage(files);
    debugVar = files;
    
    $('#customFile')[0].files[0]=files;
    // let testfile = document.querySelector('input[type="file"]').files[0]

    // Upload a file:
    @this.upload('file', files, (uploadedFilename) => {
        // Success callback.
    }, () => {
        // Error callback.
    }, (event) => {
        // Progress callback.
        // event.detail.progress contains a number between 1 and 100 as the upload progresses.
    })
    // console.log(files)
    //    Livewire.emit('setfile',files)
    //    $('#customFile').change();
    this.children[0].textContent = files.name;
    
    currentFiles = files;
    
    
    
    }, true);

    target.addEventListener("dragenter", function( e ) {
        // highlight drag area
    }, false);

    target.addEventListener("dragleave", function( e ) {
        // remove highlight
        $(target).removeClass("highlight");
        $(target).children('span').text("Drop image here.");
    }, false);

    // UI functions
    $(document).ready(function(){
    // Size Update
    var size = $('#size').val();
    $('.size-text').text(size + 'px ');
    $('#size-select').on('change', function(){
        size =  $('#size').val();
        $('.size-text').text(size + 'px ');
        
        // Load image
        MAX_WIDTH = parseInt(size, 10);
        var files = 
        loadImage(currentFiles);
        
    });
    
    });


    window.onload = function(){
        var updateRangeInput = setInterval(function(){
        var size =  $('#size').val();
        $('.size-text').text(size + 'px ');
        }, 1);
    }


    function changeMaxMin(max, min) {
    var elm = $('#size');
    $(elm).attr('max', parseInt(max, 10));
    $(elm).attr('min', parseInt(min, 10));
    
    return true;
    }

    $('#customFile').on('change',function(e){
        // alert('yes')
    })

</script>