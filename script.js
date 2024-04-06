document.getElementById('ideaForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form submission
  var idea = document.getElementById('idea').value;
  if (idea.trim() !== '') {
    addIdea(idea);
    document.getElementById('ideaForm').reset(); // Clear form fields
  } else {
    alert('Please enter your startup idea.');
  }
});

function addIdea(idea) {
  var ideaList = document.getElementById('ideaList');
  var ideaItem = document.createElement('div');
  ideaItem.classList.add('idea');
  ideaItem.textContent = idea;
  ideaList.appendChild(ideaItem);
}
