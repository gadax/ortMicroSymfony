window.addEventListener('load' , () => {
	let searcher = document.getElementById('searcher');
	let list = document.getElementById('list');

	if(searcher != null) searcher.addEventListener('input', () => {

		for(ele of list.getElementsByTagName('div'))
		{
			if(ele.textContent.includes(searcher.value))
				ele.style.display = 'block';
			else
				ele.style.display = 'none';
		}

	});
})