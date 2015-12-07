# Billing-Software-
Billing Software For Ice Cream Parlour
The software was built in three softwares 
1) Adobe Flash Professional - to build an adobe air application
2) Xampp - To maintian database
3)Php - to communication between adobe air and mysql.

These software was built only using if-else statements.
These is a piece of code that i have written in action script :-

public function ShowBill25(e: MouseEvent): void {
			billing24.x = 450;
			billing24.y = 100;
			adjTot24();
			
			billing24.width = 500 ;
			 
			total();
			bswap24();
			addChild(billing24);
			billing24.close_btn1.addEventListener(MouseEvent.CLICK, rmvBilling24);
			if(billing24._item.item1.text != "")
			{
				billing24._item.visible = true;
				billing24._item.close_btn1.visible = true;
			}
			if(item441.item1.text != "")
			{
			item441.close_btn1.visible = true;
			}
			if(item442.item1.text != "")
			{
			item442.close_btn1.visible = true;
			}
			if(item443.item1.text != "")
			{
			item443.close_btn1.visible = true;
			}
			if(item444.item1.text != "")
			{
			item444.close_btn1.visible = true;
			}
			if(item445.item1.text != "")
			{
			item445.close_btn1.visible = true;
			}
			if(item446.item1.text != "")
			{
			item446.close_btn1.visible = true;
			}
			if(item447.item1.text != "")
			{
			item447.close_btn1.visible = true;
			}
			if(item448.item1.text != "")
			{
			item448.close_btn1.visible = true;
			}
			if(item449.item1.text != "")
			{
			item449.close_btn1.visible = true;
			}
			billing24.close_btn1.visible = true;
			billing24._item.close_btn1.addEventListener(MouseEvent.CLICK, swapper441);
			item441.close_btn1.addEventListener(MouseEvent.CLICK, swapper442);
			item442.close_btn1.addEventListener(MouseEvent.CLICK, swapper443);
			item443.close_btn1.addEventListener(MouseEvent.CLICK, swapper444);
			item444.close_btn1.addEventListener(MouseEvent.CLICK, swapper445);
			item445.close_btn1.addEventListener(MouseEvent.CLICK, swapper446);
			item446.close_btn1.addEventListener(MouseEvent.CLICK, swapper447);
			item447.close_btn1.addEventListener(MouseEvent.CLICK, swapper448);
			item448.close_btn1.addEventListener(MouseEvent.CLICK, swapper449);
			item449.close_btn1.addEventListener(MouseEvent.CLICK, swapper450);
			billing24._item.close_btn1.addEventListener(MouseEvent.CLICK, remove24);
				item441.close_btn1.addEventListener(MouseEvent.CLICK, remove24);
				item442.close_btn1.addEventListener(MouseEvent.CLICK, remove24);
				item443.close_btn1.addEventListener(MouseEvent.CLICK, remove24);
				item444.close_btn1.addEventListener(MouseEvent.CLICK, remove24);
				item445.close_btn1.addEventListener(MouseEvent.CLICK, remove24);
				item446.close_btn1.addEventListener(MouseEvent.CLICK, remove24);
				item447.close_btn1.addEventListener(MouseEvent.CLICK, remove24);
				item448.close_btn1.addEventListener(MouseEvent.CLICK, remove24);
				item449.close_btn1.addEventListener(MouseEvent.CLICK, remove24);
		}

