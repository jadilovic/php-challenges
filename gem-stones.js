/*
There is a collection of rocks where each rock has various minerals embeded in it. Each type of mineral is designated by a lowercase letter 
in the range . There may be multiple occurrences of a mineral in a rock. A mineral is called a gemstone if it occurs at least once in each 
of the rocks in the collection.

Given a list of minerals embedded in each of the rocks, display the number of types of gemstones in the collection.

Example

The minerals  and  appear in each rock, so there are  gemstones.
 * Complete the 'gemstones' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING_ARRAY arr as parameter.
 */

function gemstones(arr) {
	function isInAll(char, arr) {
		let test = true;
		arr.forEach((element) => {
			if (!element.includes(char)) {
				console.log('test');
				test = false;
			}
		});

		return test;
	}

	const countList = [];
	arr.forEach((element) => {
		for (let i = 0; i < element.length; i++) {
			if (isInAll(element[i], arr)) {
				countList.push(element[i]);
			}
		}
	});

	console.log(countList);

	return [...new Set(countList)].length;
}

const arr = ['abcdde', 'baccd', 'eeabg'];
console.log(gemstones(arr));

/*
You are given a string containing characters  and  only. Your task is to change it into a string such that there are no matching adjacent 
characters. To do this, you are allowed to delete zero or more characters in the string.

Your task is to find the minimum number of required deletions.

Example

Remove an  at positions  and  to make  in  deletions.
 * Complete the 'alternatingCharacters' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING s as parameter.
 */

function alternatingCharacters(s) {
	// Write your code here
	let count = 0;
	const newString = s.split('').reduce((acc, curr) => {
		if (acc.length < 1) {
			acc.push(curr);
		} else if (acc[acc.length - 1] !== curr) {
			acc.push(curr);
		} else {
			count++;
		}
		return acc;
	}, []);
	return count;
}

console.log(alternatingCharacters('BBBAAA'));
