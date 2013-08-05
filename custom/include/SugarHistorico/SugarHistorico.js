///*
// *
// * Primera implementacion de Knockout en sugarcrm
// * usando la arquitectura MVVC
// * @author Jose Sambrano
// */
//$(function(){
//    ko.applyBindings(viewModel);
//}); 
// var GiftModel = function(gifts) {
//    var self = this;
//    self.gifts = ko.observableArray(gifts);
// 
//    self.addGift = function() {
//        self.gifts.push({
//            name: "",
//            price: ""
//        });
//    };
// 
//    self.removeGift = function(gift) {
//        self.gifts.remove(gift);
//    };
// 
//    self.save = function(form) {
//        alert("Could now transmit to server: " + ko.utils.stringifyJson(self.gifts));
//        // To actually transmit to server as a regular form post, write this: ko.utils.postJson($("form")[0], self.gifts);
//    };
//};
// 
//var viewModel = new GiftModel([
//    { name: "Tall Hat", price: "39.95"},
//    { name: "Long Cloak", price: "120.00"}
//]);
//
// 
//// Activate jQuery Validation
//$("form").validate({ submitHandler: viewModel.save });     