<form>
  <label for="nome">Nome completo:</label>
  <input type="text" id="nome" name="nome" required>

  <label for="telefone">Telefone:</label>
  <input type="tel" id="telefone" name="telefone" required>

  <label for="assunto">Assunto:</label>
  <select id="assunto" name="assunto">
    <option value="selecione">Selecione uma opção</option>
    <option value="vendas">Vendas</option>
    <option value="suporte">Suporte</option>
    <option value="financeiro">Financeiro</option>
  </select>

  <label for="idade">Idade:</label>
  <input type="number" id="idade" name="idade" min="18" max="120" required>

  <input type="submit" value="Enviar">
</form>
