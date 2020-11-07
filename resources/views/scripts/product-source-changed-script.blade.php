window.livewire.on('productCreationCompleted', (extras) => {
let productId = extras['product'].id
let productName = extras['product'].client_name

if (extras['flexographic'] != null &&
id.toString().toLowerCase() === 'flexographic') {
this.options.push({
value: productId,
text: productId + ' (' + productName + ')',
selected: false
});
} else if (extras['offset'] != null &&
id.toString().toLowerCase() === 'offset') {
this.options.push({
value: productId,
text: productId + ' (' + productName + ')',
selected: false
});
}
})
