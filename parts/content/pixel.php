<p>The <i>picture element</i> or <i>pixel</i> (pix-el) &mdash; abbreviated as px &mdash; is an fixed unit used in screen displays and digital images; a single dot on a digital display and the smallest unit of data in a digital image. How many pixels equals one point depends on pixel density or resolution. Pixel density is measured in ppi (pixels per inch), whereas printed images are measured in dpi (dots per inch). Variations in both ppi and dpi can result in variable physical sizes across mediums. Consider the following example: a 10x10px square is made up of a grid of pixels, 10 wide by 10 high, totaling 100 pixels.</p>


<div class="panel">
    <div class="row">
        <div class="large-3 columns">
        	<img src="img/10x10grid.jpg" width="320" height="320" alt=""/>
        </div>
        <div class="large-3 columns">
            <p>10x10<abbr title="pixel">px</abbr> at your <abbr title="pixels per inch">ppi</abbr> <span style="height:10px; width:10px; margin-left:5px; background-color:#007468; display:inline-block; box-shadow: inset 0 0 0 1000px #007468"></span></p>
            <p>10x10<abbr title="pixel">px</abbr> square printed at 300<abbr title="dots per inch">dpi</abbr> <span style="height:2px; width:2px; margin-left:5px; background-color:#007468; display:inline-block; box-shadow: inset 0 0 0 1000px #007468"></span></p>
        </div>
    </div>
</div>
<p>If your image has a resolution of 72ppi (pixels per inch), than one point will equal one pixel at 72ppi. The <abbr title="pixels per inch">ppi</abbr> of screens and the <abbr title="dots per inch">ppi</abbr> of printers is variable. A screen displays one pixel of image data on a physical pixel. The physical size is dependent on the density and size of pixels. A <span class="scaps">TV</span>, desktop screen, or mobile device have different pixel densities and therefore produce different physical sizes. The physical size of our 10x10 image depends on how big 100 square pixels are on a device. It may look big when displayed on a low resolution screen or tiny when printed on paper at 300dpi.</p>
<p>In terms of typography, the pixel is often used in Web documents in an attempt to produce pixel-perfect designs in the browser. The pixel unit does not scale. This is a problem when devices come in an array of sizes and users have the ability to scale a document at will &mdash; luckily, we have relative units.</p>