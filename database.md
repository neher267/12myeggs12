department:
id 	name 		slug
1 	Grocery 	grocery
2 	Assets 	assets

categories:
id 	department_id	name 
1	1			egg
2	1			rice
3	1			oil 	
4 	1			gur
5	2			tools

product:
id 	category_id		name 	 		unit
1 	1			layer-egg		pcs
2	1			deshi-dim-murgi	pcs
3 	1			egg-hash		pcs
4 	2 			balam-chal		KG
5 	2  			kalijira-chal		KG
6 	5			basket			pcs 		

images:
id 	imageable_id 	imageable_type 	type 		status
1 	1			category 		slide 		1
2 	1 			product 		profile 		1


mix_packages:
id 	name
1 	chal+egg+tel-one	
1 	chal+egg+tel-two	
1 	chal+egg+tel+gur	

packages:
id 	packageable_id 	packgeable_type 	title 				description
1	1			mix 			For you mom!		5 kg chal. 10 pcs dim. 2L oil.
2	1			mix 			For you mom!		10 kg chal. 10 pcs dim. 2L oil.
3	1			product 		Bachelor Jindabat!		25pcs layer egges.

purchases
id 	merchant_id(user_id)  	buyer_id(user_id)	product_id 	quantity 	price 
1	1				10			1		500		2500
2	1				11			5		100		5000	

stock: 
id 	product_id  	deposit 	withdraw  	balance
1	1		500		100		380	
2	5		100		 0		500

tret(nosto howa):
id	product_id 	reason  	amount 
1	1		broken		20

expences:
id 	title 		amount 	short_description
1 	transport	500		
2 	laborer 	120
3 	tea 		50		5 persons


prices:
id 	priceable_id priceable_type 	price 


gifts:
id 	name 

product_package
product_id 	package_id 	   price


