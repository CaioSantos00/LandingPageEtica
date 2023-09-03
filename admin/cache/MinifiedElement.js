class Definer{constructor(){}
newThingForIt(what){return document.createElement(what)}
ElementContainer(classForIt){let div=document.createElement("div");div.className=classForIt;return div}
btnCloseIt(classForIt){let btn=this.newElement(classForIt,'button');btn.innerText="X";btn.onclick=(e)=>{e.target.parentNode.remove()}
return btn}
newElement(classForIt,what){let Element=this.newThingForIt(what);Element.className=classForIt;return Element}
elementPropertiesDefiner(objectTo,keyValuesPair){keyValuesPair.forEach((each)=>{objectTo.setAttribute(each[0],each[1])})}};class Elemento extends Definer{additionalElements=[]
constructor(elementType){super();this.elementType=elementType}
setClasses(classBtnExclu,classElementContainer,classElement){this.classBtnExclu=classBtnExclu;this.classElementContainer=classElementContainer;this.classElement=classElement;this.createElements()}
newAdditionalElmnt(ElementoPraAdd){try{if(!(ElementoPraAdd instanceof Elemento))throw "nnÉElemento";this.container.append(ElementoPraAdd)}catch(e){if(e=="nnÉElemento")return}}
createElements(){this.btnExclu=this.btnCloseIt(this.classBtnExclu);this.container=this.ElementContainer(this.classElementContainer);this.Element=this.newElement(this.classElement,this.elementType)}
getWholeElement(){this.container.append(this.Element,this.btnExclu);return this.container}
defineAdditionalData(to,arrayKeyValuePair){switch(to){case "btnExclu":{this.elementPropertiesDefiner(this.btnExclu,arrayKeyValuePair);break}
case "container":{this.elementPropertiesDefiner(this.container,arrayKeyValuePair);break}
case "Element":{this.elementPropertiesDefiner(this.Element,arrayKeyValuePair);break}}}}
export default Elemento