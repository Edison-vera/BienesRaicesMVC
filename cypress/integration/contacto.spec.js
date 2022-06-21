/// <reference types="cypress" />

describe('Prueba el formulario de contacto', () => {
    it('Prueba la pagina de contacto y el envio de emails', () => {
        cy.visit('contacto');

        cy.get('[data-cy="heading-contacto"]').should('exist');
        cy.get('[data-cy="heading-contacto"]').invoke('text').should('equal', 'Contacto');
        cy.get('[data-cy="heading-contacto"]').invoke('text').should('not.equal', 'Formulario');

        cy.get('[data-cy="heading-formulario"]').should('exist');
        cy.get('[data-cy="heading-formulario"]').invoke('text').should('equal', 'Llene el formulario de contacto');
        cy.get('[data-cy="heading-formulario"]').invoke('text').should('not.equal', 'Formulario');

    });
});