class Definer{
	constructor(){

	}
	newThingForIt(what){
		return document.createElement(what);
	}
	ElementContainer(classForIt){
		let div = document.createElement("div");
			div.className = classForIt;

			return div;
	}
	btnCloseIt(classForIt){
		let btn = this.newElement(classForIt, 'button');
            btn.innerText = "X";
            btn.onclick = (e) => {
                e.target.parentNode.remove();
            }
        return btn;
	}
	newElement(classForIt, what){
		let Element = this.newThingForIt(what);
			Element.className = classForIt;

		return Element;
	}
	elementPropertiesDefiner(objectTo, keyValuesPair){
		keyValuesPair.forEach((each) => {			
			objectTo.setAttribute(each[0], each[1]);
		});		
	}
}