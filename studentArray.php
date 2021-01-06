<!DOCTYPE html>
<html>
<head>
	<title>Student Array Method</title>
</head>
<body>

</body>
</html>
<script type="text/javascript">
	let studentName = ['kanha', 'jayesh', 'vishal', 'jayesh', 'shivam', 'jayesh', 'ram','lakhan', 'jayesh', 'shyam'];
	// let alreadySeen = [];
// 	studentName.forEach(function(str) {
//   if (alreadySeen[str])
//     console.log(str);
//   else
//     alreadySeen[str] = true;
// });
	console.log(studentName.length);
	
let findDuplicates = arr => arr.filter((item, index) => arr.indexOf(item) != index)
	console.log(studentName.filter);

console.log(findDuplicates(studentName)) // All duplicates
console.log([...new Set(findDuplicates(studentName))]) // Unique duplicates

</script>