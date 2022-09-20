/// <reference types="cypress" />;

describe("Locaminas", () => {
  it("Devem conseguir realizar o login", () => {
    cy.visit("http://localhost/locaminas/Codigo");

    cy.get("[name=usuario]").type("victor@ufla");
    cy.get("[name=senha]").type("teste123");

    cy.get(".btn").click();
  });

  it("Devem conseguir cadastrar um cliente", () => {
    cy.visit("http://localhost/locaminas/Codigo/view/CadastroCliente.html");

    cy.get("[name=nome]").type("Tiago Viegas");
    cy.get("[name=cpf]").type("156956879562");
    cy.get("[name=cnh]").type("15264958795");
    cy.get("[name=telefone]").type("3562569857");
    cy.get("[name=email]").type("tiago@ufla");

    cy.get('[type="submit"]').click();
  });

  it("Devem conseguir cadastrar um carro", () => {
    cy.visit("http://localhost/locaminas/Codigo/view/CadastroVeiculo.html");

    cy.get("[name=nomeVeiculo]").type("Pagani");
    cy.get("[name=placa]").type("AHU9659");
    cy.get(".form-select").select("Gasolina");
    cy.get("[name=cor]").type("Prata");
    cy.get("[name=ano]").type("2020");
    cy.get("[name=valor]").type("5690.55");

    cy.get('[type="submit"]').click();
  });
});
