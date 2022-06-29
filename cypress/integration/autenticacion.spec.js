/// <reference types="cypress" />

describe('Probar la autenticacion', () => {
    it('Prueba la autenticacion en /login', () => {
        cy.visit('login');

        cy.get('[data-cy="heading-login"]').should('exist');
        cy.get('[data-cy="heading-login"]').invoke('text').should('equal', 'Iniciar Sesión');
        cy.get('[data-cy="formulario-login"]').should('exist');

        //Ambos campos son obligatorios
        cy.get('[data-cy="formulario-login"]').submit();
        cy.get('[data-cy="alerta-login"]').should('exist');
        cy.get('[data-cy="alerta-login"]').eq(0).should('have.class', 'alerta').and('have.class', 'error');
        cy.get('[data-cy="alerta-login"]').eq(0).should('have.class', 'alerta').and('have.text', 'El Email es obligatorio');

        cy.get('[data-cy="alerta-login"]').eq(1).should('have.class', 'alerta').and('have.class', 'error');
        cy.get('[data-cy="alerta-login"]').eq(1).should('have.class', 'alerta').and('have.text', 'El Password es obligatorio');
        //Verificar que el usuario exista

        //Verificar el password



    });
});