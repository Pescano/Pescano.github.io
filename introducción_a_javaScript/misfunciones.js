function primo (num) {
	for (let i=2; i<num-1; i++) {
		if (num%i == 0) {
			return false;
		}
	}
	return true;
}

function factorial (n) {
	var total = 1; 
	for (i=1; i<=n; i++) {
		total = total * i; 
	}
	return total; 
}