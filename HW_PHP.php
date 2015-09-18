<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
        <title>ebay Shopping</title>
        <style type="text/css">
			div#outline {
				border-style: solid;
				border-width: 2px;
				border-color: black;
				margin: auto;
				position: relative;
				top: 50px;
				width: 600px;
			}
			div#symbol {
				text-align: center;
				padding: 10px;
			}
			div#shopping {
				float: right;
				display: inline;
				margin-top:-10px; 
				margin-right:150px; 
				margin-left:-130px;
				font-size: 30px;
			}
			div#inline {
				border-style: solid;
				border-width: 2px;
				border-color: black;
				margin: 10px;
				position: relative;
				padding: 10px
			}
			p.header {
				display: inline;
			}
        </style>
    </head>
    <body>
        <div id="outline">
        	<!-- title -->
            <div id="symbol">
                <img src="ebay.jpg" width="30%">
                <div id="shopping">
                	<p>Shopping</p>
                </div>
            </div>
            <!-- query condition -->
            <div id="inline">
                <form action="HW_PHP.php" method="post">
                	<!-- key word -->
                    <p class="header">Key Words*:</p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="keyWord" value="" />
                    <hr />
                    
                    <!-- price range -->
                    <p class="header">Price Range:</p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    from $<input type="number" name="priceFrom" value="" />
                    to $<input type="number" name="priceTo" value="" />
                    <hr />
                    
                    <!-- condition -->
                    <p class="header">Condition:</p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="new" value="0"/>New
                    <input type="checkbox" name="used" value="0"/>Used
                    <input type="checkbox" name="veryGood" value="0"/>Very Good
                    <input type="checkbox" name="good" value="0"/>Good
                    <input type="checkbox" name="acceptable" value="0"/>Acceptable
                    <hr />
                    
                    <!-- buying formats -->
                    <p class="header">Buying formats:</p>
                    &nbsp;&nbsp;
                    <input type="checkbox" name="butItNow" value="0"/>Buy It Now
                    <input type="checkbox" name="auction" value="0"/>Auction
                    <input type="checkbox" name="classifiedAds" value="0"/>Classified Ads
                    <hr />
                    
                    <!-- seller -->
                    <p class="header">Seller:</p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="returnAccepted" value="0"/>Return accepted
                    <hr />
                    
                    <!-- shipping -->
                    <p class="header">Shipping:</p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="shipping" value="0"/>Free Shipping
                    <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;
                    <input type="checkbox" name="expeditedShippingAvailable" value="0"/>Expedited shipping available
                    <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;
                    Max handing time(days):&nbsp;<input type="text" name="maxHandingTime"/>
                    <hr />
                    
                    <!-- sort by -->
                    <p class="header">Sort by:</p>
                    <select name="sortBy">
                    	<option value="Best Match">Best Match</option>
                    	<option value="Price: highest first">Price: highest first</option>
                    	<option value="Price + Shipping: highest first">Price + Shipping: highest first</option>
                    	<option value="Price + Shipping: lowest first">Price + Shipping: lowest first</option>
                    </select>
                    <hr />
                    
                    <!-- results per page -->
                    <p class="header">Results Per Page</p>
                    <select name="resultsPerPage">
                    	<option value="5">5</option>
                    	<option value="10">10</option>
                    	<option value="15">15</option>
                    	<option value="20">20</option>
                    </select>
                    <br />
                    <br />
                    
                    <!-- function button -->
                    <input type="button" name="clear" value="Clear" />
                    <input type="submit" name="search" value="Search" />
                </form>
            </div>
        </div>
    </body>
</html>