/// <reference types="cypress" />;

describe("Locaminas", () => {
  it("devem digitar usuario ou senha incorreto", () => {
    cy.visit("http://localhost/locaminas/Codigo");

    cy.get("[name=usuario]").type("teste@ufla");
    cy.get("[name=senha]").type("teste123");

    cy.get(".btn").click();
  });

  it("devem poder realizar o login", () => {
    cy.visit("http://localhost/locaminas/Codigo");

    cy.get("[name=usuario]").type("victor@ufla");
    cy.get("[name=senha]").type("teste123");

    cy.get(".btn").click();
  });
});
