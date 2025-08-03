
function mostrarMais(botao) {
	const postagem = botao.closest('.postagem');
	const pontos = postagem.querySelector('.pontos');
	const mais = postagem.querySelector('.conteudo-extra');

	pontos.style.display = 'none';
	mais.style.display = 'inline';
	botao.style.display = 'none';
}










fiveserver.config.js
module.exports = {
  php: "					/usr/bin/php"              // macOS/Ubuntu
  php: "C:\\xampp\\php\\php.exe"   // Windows
}