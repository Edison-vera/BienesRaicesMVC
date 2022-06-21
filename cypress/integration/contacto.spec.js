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
    it('Llena los campos del formulario', () => {
        cy.visit('contacto');

        cy.get('[data-cy="input-nombre"]').type('Edison Vera');
        cy.get('[data-cy="input-mensaje"]').type('Hola Hola Hola Hola');
        cy.get('[data-cy="input-opciones"]').select('Vende');
        cy.get('[data-cy="input-presupuesto"]').type('9999999');
        cy.get('[data-cy="forma-contacto"]').eq(1).check();

        cy.wait(3000);

        cy.get('[data-cy="forma-contacto"]').eq(0).check();
        cy.get('[data-cy="input-telefono"]').type('123456789');
        cy.get('[data-cy="input-fecha"]').type('2022-03-01');
        cy.get('[data-cy="input-hora"]').type('08:30');
    });
});