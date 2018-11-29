
<style>

 	

div#page {
border:1px solid purple;
width:90%;
    margin: auto;
    padding: 10px;
text-align:left;

}
 	

div {
text-align:center;
}
 	

div#menu {
  border:2px solid green;
  width:22%;
  float:left;
  margin:10px 0 10px 5px;
  height:auto;


}

div#content {
  border:2px solid blue;
  width:75%;
  min-height:84%;
  height:auto;
 margin-left: 24%;
 
}
 


    .button-menu {

        display: inline-block;
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box;
        float: none;
        z-index: auto;
        width: 150px;
        text-align: center;
        height: auto;
        position: static;
        cursor: pointer;
        opacity: 1;
        margin: 0;
        padding: 3px 5px;
        overflow: visible;
        border: none;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        font: normal 16px/normal "Comic Sans MS", cursive, sans-serif;
        color: rgba(7,7,7,1);
        -o-text-overflow: clip;
        text-overflow: clip;
        background: rgba(98,140,30,0.93);
        -webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
        box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
        text-shadow: -0.5px -0.5px 0 rgba(5,5,5,1) ;
        -webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
        -moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
        -o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
        transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
        -webkit-transform: none;
        transform: none;
        -webkit-transform-origin: 50% 50% 0;
        transform-origin: 50% 50% 0;
    }


</style>
<div id="page">
	

 <div id="menu">Menu<br>

              <a href='?controller=gallery&action=browse'><div class ='button-menu'>Gallery Upload</div></a>

 </div>

	

 <div id="content">Content</div>


</div>