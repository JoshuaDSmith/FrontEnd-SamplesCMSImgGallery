    function functionAlert(thisValue) {

        console.log(thisValue)
                let selectorValue = thisValue - 1;

                let Selector = event.target.parentNode.parentNode.children;
                console.log(Selector[0]);
                let NewValue = Selector[selectorValue].children[1].outerHTML;
                GalleryItem = NewValue.match(/[^<img onclick="functionAlet(0-9)\ssrc="].*[^"|>]g/g);
                console.log(GalleryItem);
                let choice = GalleryItem[0];


                var expandImg = document.getElementById("expandedImg");
                  var imgText = document.getElementById("imgtext");
                  expandImg.src = choice;

              
                  // imgText.innerHTML = GalleryItem.alt;
                  expandImg.parentElement.style.display = "block";

              


    }